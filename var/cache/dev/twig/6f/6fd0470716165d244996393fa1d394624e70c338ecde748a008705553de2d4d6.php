<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_96a8289464bcaf5d5320416db312cd9996e8ee59472619e58985ecc7b9e324ce extends Twig_Template
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
        $__internal_d3fecfc6990dfe73816360f655df9f38d8ce313dd6f331c83de56c2c4300d671 = $this->env->getExtension("native_profiler");
        $__internal_d3fecfc6990dfe73816360f655df9f38d8ce313dd6f331c83de56c2c4300d671->enter($__internal_d3fecfc6990dfe73816360f655df9f38d8ce313dd6f331c83de56c2c4300d671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3fecfc6990dfe73816360f655df9f38d8ce313dd6f331c83de56c2c4300d671->leave($__internal_d3fecfc6990dfe73816360f655df9f38d8ce313dd6f331c83de56c2c4300d671_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e97eefc781b23fc20b9e6d6361fa641c458eea849c26497591ef41a8120411fa = $this->env->getExtension("native_profiler");
        $__internal_e97eefc781b23fc20b9e6d6361fa641c458eea849c26497591ef41a8120411fa->enter($__internal_e97eefc781b23fc20b9e6d6361fa641c458eea849c26497591ef41a8120411fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e97eefc781b23fc20b9e6d6361fa641c458eea849c26497591ef41a8120411fa->leave($__internal_e97eefc781b23fc20b9e6d6361fa641c458eea849c26497591ef41a8120411fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ee734ee586223ff388fad831a8c99a6c1c88ebfaf1450b67cbb858720df6054 = $this->env->getExtension("native_profiler");
        $__internal_8ee734ee586223ff388fad831a8c99a6c1c88ebfaf1450b67cbb858720df6054->enter($__internal_8ee734ee586223ff388fad831a8c99a6c1c88ebfaf1450b67cbb858720df6054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8ee734ee586223ff388fad831a8c99a6c1c88ebfaf1450b67cbb858720df6054->leave($__internal_8ee734ee586223ff388fad831a8c99a6c1c88ebfaf1450b67cbb858720df6054_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b451adc03aaae15c9163bc049d881dbd1cf183eec3734a2a45cf6335c547d611 = $this->env->getExtension("native_profiler");
        $__internal_b451adc03aaae15c9163bc049d881dbd1cf183eec3734a2a45cf6335c547d611->enter($__internal_b451adc03aaae15c9163bc049d881dbd1cf183eec3734a2a45cf6335c547d611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b451adc03aaae15c9163bc049d881dbd1cf183eec3734a2a45cf6335c547d611->leave($__internal_b451adc03aaae15c9163bc049d881dbd1cf183eec3734a2a45cf6335c547d611_prof);

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
