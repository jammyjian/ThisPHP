<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{


    public function __construct()
    {
        //测试版本回退 
    }


    public function index()
    {
        //echo 'aa';die;
        //dd(app());
        $array =debug_backtrace();
        $html = '';
        //print_r($array);//信息很齐全
        unset($array[0]);
        foreach($array as $row)
        {
            $html .=$row['file'].':'.$row['line'].'行,调用方法:'.$row['function']."<p>";
        }
        echo $html;die;
    }

    public function param(\Illuminate\Http\Request $request)
    {
        $param = $request->route('name');
        var_dump($param);die;
    }


    /**
     * 返回JSON格式的Swagger定义
     *
     * 这里需要一个主`Swagger`定义：
     * @SWG\Swagger(
     *   @SWG\Info(
     *     title="我的`Swagger`API文档",
     *     version="1.0.0"
     *   )
     * )
     */
    public function swaggerDoc()
    {
        //echo 'swagger测试';
        // 你可以将API的`Swagger Annotation`写在实现API的代码旁，从而方便维护，
        // `swagger-php`会扫描你定义的目录，自动合并所有定义。这里我们直接用`Controller/`
        // 文件夹。
        $swagger = \Swagger\scan(app_path('Http/Controllers/'));
        return response()->json($swagger, 200);
    }

    /**
     * 假设是项目中的一个API
     *
     * @SWG\Get(path="/test/swagger2",
     *   tags={"APP接口"},
     *   summary="拿一些神秘的数据",
     *   description="接口1",
     *   operationId="getMyData",
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     in="formData",
     *     name="message",
     *     type="string",
     *     description="拿数据的理由",
     *     required=true,
     *   ),
     *     @SWG\Parameter(
     *     in="formData",
     *     name="name",
     *     type="string",
     *     description="姓名",
     *     required=false,
     *   ),
     *   @SWG\Response(response="default", description="操作成功"),
     *
     * )
     */
    public function swagger2()
    {
        

    }

    /**
     * 假设是项目中的一个API
     *
     * @SWG\Get(path="/test/swagger3",
     *   tags={"APP接口"},
     *   summary="第三个",
     *   description="接口3",
     *   operationId="swagger3",
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     in="formData",
     *     name="reason",
     *     type="string",
     *     description="第三个",
     *     required=true,
     *   ),
     *   @SWG\Response(response="default", description="第三个")
     * )
     */
    public function swagger3()
    {

    }

}
