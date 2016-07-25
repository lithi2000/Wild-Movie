<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_68c8ecbf8430ed672fe5bdc40f68026546e1628d0759915aea52c4d6306cadc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddc5e67a8e278b3a04b4999b5b11e9bc41e1acdd8452ad38d14960f5491a08d6 = $this->env->getExtension("native_profiler");
        $__internal_ddc5e67a8e278b3a04b4999b5b11e9bc41e1acdd8452ad38d14960f5491a08d6->enter($__internal_ddc5e67a8e278b3a04b4999b5b11e9bc41e1acdd8452ad38d14960f5491a08d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddc5e67a8e278b3a04b4999b5b11e9bc41e1acdd8452ad38d14960f5491a08d6->leave($__internal_ddc5e67a8e278b3a04b4999b5b11e9bc41e1acdd8452ad38d14960f5491a08d6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_589b54f9b7b6016bcd9bb86e332dfc2a7de5df5372bc8b8cba264c3844ba0ee7 = $this->env->getExtension("native_profiler");
        $__internal_589b54f9b7b6016bcd9bb86e332dfc2a7de5df5372bc8b8cba264c3844ba0ee7->enter($__internal_589b54f9b7b6016bcd9bb86e332dfc2a7de5df5372bc8b8cba264c3844ba0ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_589b54f9b7b6016bcd9bb86e332dfc2a7de5df5372bc8b8cba264c3844ba0ee7->leave($__internal_589b54f9b7b6016bcd9bb86e332dfc2a7de5df5372bc8b8cba264c3844ba0ee7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1fa691d161d312c50c9555b7b43c58d5947fc900bb908da1866a239f7ccbddee = $this->env->getExtension("native_profiler");
        $__internal_1fa691d161d312c50c9555b7b43c58d5947fc900bb908da1866a239f7ccbddee->enter($__internal_1fa691d161d312c50c9555b7b43c58d5947fc900bb908da1866a239f7ccbddee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1fa691d161d312c50c9555b7b43c58d5947fc900bb908da1866a239f7ccbddee->leave($__internal_1fa691d161d312c50c9555b7b43c58d5947fc900bb908da1866a239f7ccbddee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27d3dab8900c91427330cadb50bb04e7deabbf1a0f3a40c8c69bcfbaa8569904 = $this->env->getExtension("native_profiler");
        $__internal_27d3dab8900c91427330cadb50bb04e7deabbf1a0f3a40c8c69bcfbaa8569904->enter($__internal_27d3dab8900c91427330cadb50bb04e7deabbf1a0f3a40c8c69bcfbaa8569904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_27d3dab8900c91427330cadb50bb04e7deabbf1a0f3a40c8c69bcfbaa8569904->leave($__internal_27d3dab8900c91427330cadb50bb04e7deabbf1a0f3a40c8c69bcfbaa8569904_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
