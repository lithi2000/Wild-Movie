<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6c5afd28c07867827d7036127d21b771e8e84d3fbd77429fefd03c2391588553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4078e1e4d43620e5846f7d0826da208f665014c0f0bbb9ba366ee1ef61a1334 = $this->env->getExtension("native_profiler");
        $__internal_a4078e1e4d43620e5846f7d0826da208f665014c0f0bbb9ba366ee1ef61a1334->enter($__internal_a4078e1e4d43620e5846f7d0826da208f665014c0f0bbb9ba366ee1ef61a1334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4078e1e4d43620e5846f7d0826da208f665014c0f0bbb9ba366ee1ef61a1334->leave($__internal_a4078e1e4d43620e5846f7d0826da208f665014c0f0bbb9ba366ee1ef61a1334_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68ba6749c8b41ed17e2185dfc95114b69c5aea0783cf0f8e9d2ec4e84886936e = $this->env->getExtension("native_profiler");
        $__internal_68ba6749c8b41ed17e2185dfc95114b69c5aea0783cf0f8e9d2ec4e84886936e->enter($__internal_68ba6749c8b41ed17e2185dfc95114b69c5aea0783cf0f8e9d2ec4e84886936e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_68ba6749c8b41ed17e2185dfc95114b69c5aea0783cf0f8e9d2ec4e84886936e->leave($__internal_68ba6749c8b41ed17e2185dfc95114b69c5aea0783cf0f8e9d2ec4e84886936e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_307c2af624cd72f6f7dfb3cce577a3e3f53234a25bf24915c0d9a896d80d95b5 = $this->env->getExtension("native_profiler");
        $__internal_307c2af624cd72f6f7dfb3cce577a3e3f53234a25bf24915c0d9a896d80d95b5->enter($__internal_307c2af624cd72f6f7dfb3cce577a3e3f53234a25bf24915c0d9a896d80d95b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_307c2af624cd72f6f7dfb3cce577a3e3f53234a25bf24915c0d9a896d80d95b5->leave($__internal_307c2af624cd72f6f7dfb3cce577a3e3f53234a25bf24915c0d9a896d80d95b5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_875fcd92e0cdb96cbb6207a4637f6c132ca01cecbb5dc5ed5870adb2ea3a6019 = $this->env->getExtension("native_profiler");
        $__internal_875fcd92e0cdb96cbb6207a4637f6c132ca01cecbb5dc5ed5870adb2ea3a6019->enter($__internal_875fcd92e0cdb96cbb6207a4637f6c132ca01cecbb5dc5ed5870adb2ea3a6019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_875fcd92e0cdb96cbb6207a4637f6c132ca01cecbb5dc5ed5870adb2ea3a6019->leave($__internal_875fcd92e0cdb96cbb6207a4637f6c132ca01cecbb5dc5ed5870adb2ea3a6019_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
