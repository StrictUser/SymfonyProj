<?php
namespace AppBundle\Controller;

	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Symfony\Component\HttpFoundation\JsonResponse;
	use Symfony\Component\HttpFoundation\Response;


	/**
	 * Class LuckyController
	 * @package AppBundle\Controller
	 */
	class LuckyController
	{
		/**
		 * @Route("api/lucky/number")
		 */
		public function apiNumberAction(){
			$data = array(
				'lucky_number' => rand(0,100),
			);

			return new JsonResponse($data);
		}

		/**
		 * @Route("lucky/number/{count}")
		 */
		public function numberAction($count){
			$numbers = array();
			for ($i=0;$i<$count;$i++){
				$numbers[] = rand(0,100);
			}
			$numberlist = implode(', ', $numbers);

			return new Response(
				'<html><body>Lucky numbers: '.$numberlist.'</body></html>'
			);
		}
	}