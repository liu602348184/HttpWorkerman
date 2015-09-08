<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

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

	public function index($response)
	{
		// var_dump($param);die;
		// $this->load->view('welcome_message');
		$response->send("hello world \n");
	}

	public function show($response){
		$this->load->model('Test_model');

		$col = "著名的web服务器 安海斯布希AB也是世界最大啤酒制造商美国安海斯布希(即An-Busch公司,或Anheuser-Busch公司) 的简称 安海斯-布希公司(Anheuser-Busch，简称A-B公司)于1852年创立，总部位于美国密苏里州圣路易斯市，旗下有世界最大的啤酒酿造公司，美国第二大铝制啤酒罐制造厂等。安海斯-布希公司出产的百威啤酒(Budweiser)名扬世界，深爱各国消费者喜爱。 安海斯--布希公司年产啤酒1300万吨，自1957年以来啤酒产量一直居美国行业之首，占美国啤酒市场份额的46%，并以绝对优势控制着世界9%的啤酒市场。 安海斯-布希公司于1981年成立了安海斯-布希国际公司(Anheuser-Busch International Inc.)，专门负责开拓国际市场。目前，该公司的啤酒已销往世界80多个国家和地区，并已在包括中国在内的11个国家设厂生产啤酒。 美国安海斯-布希公司(百威啤酒)于1852年创立，年产啤酒1300万吨，自1957年以来啤酒产量一直居美国行业之首，占美国啤酒市场份额的46%，并以绝对优势控制着世界9%的啤酒市场。在中国，安海斯-布希通过入股、合资开设分厂等模式也取得了飞速发展。 公 司主要生产百威牌啤酒和中德牌啤酒。有着120年历史的美国安海斯--布希公司，采用世界独一无二的榉木酢工艺， 从选料、糖化、发酵、过滤、直到罐装的每一个工序。 然而，随着美国次贷危机及世界金融经济动荡的深化，美国安海斯--布希公司也受到了冲击。特别是在同行业的白热化竞争中，逐渐显落下风。它不得不直面屡战屡胜且不断发展壮大的国际啤酒大鳄－－－英博的威胁。 在这场业内鏖战中，内忧外患的美国安海斯--布希公司最终落败。 2008年7月14日，经过一轮“软硬兼施”后，美国啤酒百威的母公司安海斯(下称“A-B公司”)终于以520亿美元的作价被比利时啤酒公司英博(InBev)收归麾下，英博给出了高达520亿美元的收购价，即平均每股70美元，比第一次65美元有近7.6%溢价。据悉，这个新公司将命名为“安海斯-布什英博”。新的啤酒航母将有460万千升的销售量，跃居世界第一位。新的公司将以692亿欧元的公司市值位列全球消费品公司第四位。由于A-B日后将成为英博的全资子公司，对于整合后的人事安排，双方声明表示公司的北美总部仍将位于A-B所在的密苏里州，InBev 的CEO Brito将再任新公司CEO，同时保证现任A-B的CEO和另一名高层将入公司董事会。 2008年11月19日，英博完成对A-B公司的合并，成立百威英博公司。";


		$this->Test_model->db->query("INSERT INTO test_table(col) VALUES('{$col}')");
		// $data = $this->Test_model->get();

		$response->send('success');
	}
}
