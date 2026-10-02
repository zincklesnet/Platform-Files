<?php
namespace ZinCelestial\Platform\OperationsCenter;defined('ABSPATH')||exit;
final class OperationsCenterController {public function __construct(private OperationsCenterService $service){}public function register():void{register_rest_route('zincelestial/v1','/operations-center',['methods'=>'GET','callback'=>[$this,'index'],'permission_callback'=>fn()=>current_user_can('manage_options')]);}public function index(\WP_REST_Request $r):\WP_REST_Response{return new \WP_REST_Response(['summary'=>$this->service->summary(),'recent'=>$this->service->recent((int)$r->get_param('limit'))],200);}}
