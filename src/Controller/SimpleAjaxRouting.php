<?php

namespace Hhcom\ContaoSimpleAjaxRouting\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SimpleAjaxRouting extends Controller
{
    /**
     * @return JsonResponse
     */
    public function articleSearchAction($action = 0, Request $request)
    {
		/*
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array(
                'status' => 'Error',
                'message' => 'Error'),
            400);
        }
		*/
		
		$objArticleModel = \ArticleModel::findByPk((int)$action );		

        return new JsonResponse(array(
			'data' => $objArticleModel->row(),
            'status' => 'OK',
            'message' => ['returntest', 'testarray']),
        200);
		
    }
	
	/**
     * @return JsonResponse
     */
    public function pageSearchAction($action = 0, Request $request)
    {
		/*
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array(
                'status' => 'Error',
                'message' => 'Error'),
            400);
        }
		*/

		$objPageModel = \PageModel::findByPk((int)$action );	

        return new JsonResponse(array(
			'data' => $objPageModel->row(),
            'status' => 'OK',
            'message' => ['returntest', 'testarray']),
        200);
		
    }
}
?>
