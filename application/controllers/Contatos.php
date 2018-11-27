<?php
class Contatos extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('contatos_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['contatos'] = $this->contatos_model->get_contatos();
        $data['title'] = 'Lista de contatos';
 
        $this->template->load('template', 'contato/index', $data);


    }
 
    public function view($id = NULL)
    {
        $data['contato'] = $this->contatos_model->get_contatos($id);
        
        if (empty($data['contato']))
        {
            show_404();
        }
 
        $data['nome'] = $data['contato']['nome'];
 
        $this->template->load('template', 'contato/view', $data);
    }
    

    public function edit()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Editar contato:';        
        $data['contato'] = $this->contatos_model->get_contatos($id);

        $this->form_validation->set_rules('nome', 'nome', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('ddd', 'ddd', 'required');
        $this->form_validation->set_rules('numero', 'numero', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->template->load('template', 'contato/edit', $data);
        }
        else
        {
            $this->contatos_model->set_contato($id);
            //$this->load->view('news/success');
            redirect( base_url() );
        }
    }



    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Adicionar Contato';
 
        $this->form_validation->set_rules('nome', 'nome', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('ddd', 'ddd', 'required');
        $this->form_validation->set_rules('numero', 'numero', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->template->load('template', 'contato/create', $data);

 
        }
        else
        {
            $this->contatos_model->set_contato();
            redirect( base_url());   

        }
    }
    
    
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $news_item = $this->contatos_model->get_contatos($id);
        
        $this->contatos_model->delete_contato($id);        
        redirect( base_url());        
    }
}
