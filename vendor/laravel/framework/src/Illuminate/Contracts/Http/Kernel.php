<?php

namespace Illuminate\Contracts\Http;

interface Kernel
{
    /**
     * Bootstrap the application for HTTP requests.[引导应用程序进行HTTP请求。]
     *
     * @return void
     */
    public function bootstrap();

    /**
     * Handle an incoming HTTP request.[处理传入的HTTP请求。]
     *
     * @param  \Symfony\Component\HttpFoundation\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle($request);

    /**
     * Perform any final actions for the request lifecycle. [对请求生命周期执行任何最终操作。]
     *
     * @param  \Symfony\Component\HttpFoundation\Request  $request
     * @param  \Symfony\Component\HttpFoundation\Response  $response
     * @return void
     */
    public function terminate($request, $response);

    /**
     * Get the Laravel application instance. [获取Laravel应用程序实例]
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public function getApplication();
}
