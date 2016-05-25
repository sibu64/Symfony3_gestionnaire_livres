<?php

/* OCSiteBundle:Default:index.html.twig */
class __TwigTemplate_fbfa07202e9c7fb422f692ae9b97c24fcffbe1086acc61e46e0ece02dd8a6209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "OCSiteBundle:Default:index.html.twig", 3);
        $this->blocks = array(
            'Title' => array($this, 'block_Title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd34469d606485deea9c8ee5c9a7e3ed83c47a203325dd9e7aa6028b80471f1e = $this->env->getExtension("native_profiler");
        $__internal_cd34469d606485deea9c8ee5c9a7e3ed83c47a203325dd9e7aa6028b80471f1e->enter($__internal_cd34469d606485deea9c8ee5c9a7e3ed83c47a203325dd9e7aa6028b80471f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCSiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd34469d606485deea9c8ee5c9a7e3ed83c47a203325dd9e7aa6028b80471f1e->leave($__internal_cd34469d606485deea9c8ee5c9a7e3ed83c47a203325dd9e7aa6028b80471f1e_prof);

    }

    // line 5
    public function block_Title($context, array $blocks = array())
    {
        $__internal_c3e77c844d569b8139f55069fdc206efb6402787a63a4033ef9b8144c512dc86 = $this->env->getExtension("native_profiler");
        $__internal_c3e77c844d569b8139f55069fdc206efb6402787a63a4033ef9b8144c512dc86->enter($__internal_c3e77c844d569b8139f55069fdc206efb6402787a63a4033ef9b8144c512dc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        echo "Accueil ";
        
        $__internal_c3e77c844d569b8139f55069fdc206efb6402787a63a4033ef9b8144c512dc86->leave($__internal_c3e77c844d569b8139f55069fdc206efb6402787a63a4033ef9b8144c512dc86_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d547eccec422d4c15efd4e40b5e766e3e0010bc7a9a850f08343710eec99c23d = $this->env->getExtension("native_profiler");
        $__internal_d547eccec422d4c15efd4e40b5e766e3e0010bc7a9a850f08343710eec99c23d->enter($__internal_d547eccec422d4c15efd4e40b5e766e3e0010bc7a9a850f08343710eec99c23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    hello World!
";
        
        $__internal_d547eccec422d4c15efd4e40b5e766e3e0010bc7a9a850f08343710eec99c23d->leave($__internal_d547eccec422d4c15efd4e40b5e766e3e0010bc7a9a850f08343710eec99c23d_prof);

    }

    public function getTemplateName()
    {
        return "OCSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  47 => 8,  35 => 5,  11 => 3,);
    }
}
/* */
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block Title %}Accueil {%endblock%}   */
/* */
/* */
/* {% block body %}*/
/*     hello World!*/
/* {%endblock%}*/
/* */
