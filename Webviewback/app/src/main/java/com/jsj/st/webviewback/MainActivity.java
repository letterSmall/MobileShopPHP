package com.jsj.st.webviewback;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.KeyEvent;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class MainActivity extends AppCompatActivity {
    private WebView mWebView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        mWebView = (WebView) findViewById(R.id.main_web);
        // 首先设置支持JS脚本
        mWebView.getSettings().setJavaScriptEnabled(true);
        // 支持Js在当前App打开应用，当页面跳转的时候依旧在当前的WebView之中
        mWebView.setWebViewClient(new WebViewClient());
        // 传入当前我们需要打开的网址(基于http的，也有的是https，不过后台给的一般都没有问题),记得添加网络权限
        mWebView.loadUrl("http://10.2.36.131:80/MobileShop/jingtaiyemian/index.php");
    }

    //使用Webview的时候，返回键没有重写的时候会直接关闭程序，这时候其实我们要其执行的知识回退到上一步的操作
    @Override
    public boolean onKeyDown(int keyCode, KeyEvent event) {
        //这是一个监听用的按键的方法，keyCode 监听用户的动作，如果是按了返回键，同时Webview要返回的话，WebView执行回退操作，因为mWebView.canGoBack()返回的是一个Boolean类型，所以我们把它返回为true
        if(keyCode== KeyEvent.KEYCODE_BACK&&mWebView.canGoBack()){
            mWebView.goBack();
            return true;
        }

        return super.onKeyDown(keyCode, event);
    }

}
