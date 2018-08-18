<?php
class ControllerExtensionShippingflat2 extends Controller {
	private $error = array(); 
	
	public function index() {   
		$this->load->language('extension/shipping/flat2');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('setting/setting');
				
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('shipping_flat2', $this->request->post);		
					
			$this->session->data['success'] = $this->language->get('text_success');
						
			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true));
		}
				
		// $this->data['heading_title'] = $this->language->get('heading_title');

		// $this->data['text_enabled'] = $this->language->get('text_enabled');
		// $this->data['text_disabled'] = $this->language->get('text_disabled');
		// $this->data['text_all_zones'] = $this->language->get('text_all_zones');
		// $this->data['text_none'] = $this->language->get('text_none');
		
		// $this->data['entry_cost'] = $this->language->get('entry_cost');
		// $this->data['entry_tax_class'] = $this->language->get('entry_tax_class');
		// $this->data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
		// $this->data['entry_status'] = $this->language->get('entry_status');
		// $this->data['entry_sort_order'] = $this->language->get('entry_sort_order');
		
		// $this->data['button_save'] = $this->language->get('button_save');
		// $this->data['button_cancel'] = $this->language->get('button_cancel');

 		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

  		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
      		//'separator' => false
   		);

   		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true)
      		//'separator' => ' :: '
   		);
		
   		$data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/shipping/flat', 'user_token=' . $this->session->data['user_token'], true)
      		//'separator' => ' :: '
   		);
		
		$data['action'] = $this->url->link('extension/shipping/flat2', 'user_token=' . $this->session->data['user_token'], true);
		
		$data['cancel'] = $this->url->link('extension/shipping', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true);
		
		if (isset($this->request->post['shipping_flat2_cost'])) {
			$data['shipping_flat2_cost'] = $this->request->post['shipping_flat2_cost'];
		} else {
			$data['shipping_flat2_cost'] = $this->config->get('shipping_flat2_cost');
		}

		if (isset($this->request->post['shipping_flat2_tax_class_id'])) {
			$data['shipping_flat2_tax_class_id'] = $this->request->post['shipping_flat2_tax_class_id'];
		} else {
			$data['shipping_flat2_tax_class_id'] = $this->config->get('shipping_flat2_tax_class_id');
		}

        $this->load->model('localisation/tax_class');

        $data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();
        
		if (isset($this->request->post['shipping_flat2_geo_zone_id'])) {
			$data['shipping_flat2_geo_zone_id'] = $this->request->post['shipping_flat2_geo_zone_id'];
		} else {
			$data['shipping_flat2_geo_zone_id'] = $this->config->get('shipping_flat2_geo_zone_id');
		}
        
        $this->load->model('localisation/geo_zone');

        $data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();
        
		if (isset($this->request->post['shipping_flat2_status'])) {
			$data['shipping_flat2_status'] = $this->request->post['shipping_flat2_status'];
		} else {
			$data['shipping_flat2_status'] = $this->config->get('shipping_flat2_status');
		}
		
		if (isset($this->request->post['shipping_flat2_sort_order'])) {
			$data['shipping_flat2_sort_order'] = $this->request->post['shipping_flat2_sort_order'];
		} else {
			$data['shipping_flat2_sort_order'] = $this->config->get('shipping_flat2_sort_order');
		}				

        $data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/shipping/flat2', $data));
	}
	
	private function validate() {
		if (!$this->user->hasPermission('modify', 'extension/shipping/flat2')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		return !$this->error;
	}
}
?>
