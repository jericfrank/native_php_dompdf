<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/dompdf/autoload.inc.php';
// require_once APPPATH.'libraries/dompdf/lib/html5lib/Parser.php';
// require_once APPPATH.'libraries/dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
// require_once APPPATH.'libraries/dompdf/lib/php-svg-lib/src/autoload.php';
// require_once APPPATH.'libraries/dompdf/src/Autoloader.php';

// Dompdf\Autoloader::register();

use Dompdf\Dompdf;
use Dompdf\Options;

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function pdf()
	{
		$this->load->view('topdf/index');
	}

	public function generate()
	{
		$data = [
	    	'_1_month_year' => $this->input->get_post('_1_month_year', TRUE),
	    	'_2_yes' => $this->input->get_post('_2_yes', TRUE),
	    	'_2_no' => $this->input->get_post('_2_no', TRUE),
	    	'_3_no_sheet' => $this->input->get_post('_3_no_sheet', TRUE),
	    	'_4_yes' => $this->input->get_post('_4_yes', TRUE),
	    	'_4_no' => $this->input->get_post('_4_no', TRUE),
	    	'_5_tin' => $this->input->get_post('_5_tin', TRUE)
	    ];

		$dompdf = new Dompdf();

		$html = $this->load->view('topdf/index', $data  , true);

		$dompdf->loadHtml( $html );
		$dompdf->setPaper( 'legal' , 'portrait');
		$dompdf->render();
		$dompdf->stream();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */