<?php

/* FrontendBundle:Default:article.html.twig */
class __TwigTemplate_2bf5c259984f1ef079ad6af1a4436f1244ff6c265617667cdf74a0b4050786be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:article.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00cdbedab325ab002c23e33178509da13e13cf3bf36444114d6266d464d13094 = $this->env->getExtension("native_profiler");
        $__internal_00cdbedab325ab002c23e33178509da13e13cf3bf36444114d6266d464d13094->enter($__internal_00cdbedab325ab002c23e33178509da13e13cf3bf36444114d6266d464d13094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00cdbedab325ab002c23e33178509da13e13cf3bf36444114d6266d464d13094->leave($__internal_00cdbedab325ab002c23e33178509da13e13cf3bf36444114d6266d464d13094_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38f06404e73da7c473daa7ee0859b364463dde50b9c8fd5459a10c6d17bc94d6 = $this->env->getExtension("native_profiler");
        $__internal_38f06404e73da7c473daa7ee0859b364463dde50b9c8fd5459a10c6d17bc94d6->enter($__internal_38f06404e73da7c473daa7ee0859b364463dde50b9c8fd5459a10c6d17bc94d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t
\t<h2> La WCS inaugure son nouvel espace de vente de pop corn </h2>

\t
\t<div class=\"col-md-5\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/photo1.jpg"), "html", null, true);
        echo "\">
\t\t\t
\t</div>

\t<div class=\"col-md-5\">
\t\t<h3>Derniers articles</h3>
\t\t<hr>
\t\t
\t\t<div class=\"col-md-12 article-style-1\">
\t\t\t<p><strong>Vente de string peau de panthère à la WCS ...</strong></h3>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
\t\t</div>
\t\t<div class=\"col-md-12 article-style-1\">
\t\t\t<p><strong> Tempête de neige à la WCS...</strong></h3>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
\t\t</div>
\t\t<div class=\"col-md-12 article-style-1\">
\t\t\t<p><strong> Viste de James Bond à la WCS</strong></h3>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
\t\t</div>
\t\t<div class=\"col-md-12 article-style-1\">
\t\t\t<p><strong>Qui a volé le string peau de panthère de T.L ?</strong></h3>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
\t\t</div>
\t\t
\t</div>
\t

";
        
        $__internal_38f06404e73da7c473daa7ee0859b364463dde50b9c8fd5459a10c6d17bc94d6->leave($__internal_38f06404e73da7c473daa7ee0859b364463dde50b9c8fd5459a10c6d17bc94d6_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* 	*/
/* 	<h2> La WCS inaugure son nouvel espace de vente de pop corn </h2>*/
/* */
/* 	*/
/* 	<div class="col-md-5"><img src="{{ asset('img/photo1.jpg') }}">*/
/* 			*/
/* 	</div>*/
/* */
/* 	<div class="col-md-5">*/
/* 		<h3>Derniers articles</h3>*/
/* 		<hr>*/
/* 		*/
/* 		<div class="col-md-12 article-style-1">*/
/* 			<p><strong>Vente de string peau de panthère à la WCS ...</strong></h3>*/
/* 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>*/
/* 		</div>*/
/* 		<div class="col-md-12 article-style-1">*/
/* 			<p><strong> Tempête de neige à la WCS...</strong></h3>*/
/* 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>*/
/* 		</div>*/
/* 		<div class="col-md-12 article-style-1">*/
/* 			<p><strong> Viste de James Bond à la WCS</strong></h3>*/
/* 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>*/
/* 		</div>*/
/* 		<div class="col-md-12 article-style-1">*/
/* 			<p><strong>Qui a volé le string peau de panthère de T.L ?</strong></h3>*/
/* 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* 	*/
/* */
/* {% endblock %}*/
