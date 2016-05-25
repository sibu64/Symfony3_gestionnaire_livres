<?php

/* base.html.twig */
class __TwigTemplate_b6d583b6455622bf9e22d23d68cd1c8af12402ffaea4f6f2c0bd3b4485896b4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02f4d775e67bd2d90d0c10cc2533a951c2c742820a76b49bce9676ada900ae6f = $this->env->getExtension("native_profiler");
        $__internal_02f4d775e67bd2d90d0c10cc2533a951c2c742820a76b49bce9676ada900ae6f->enter($__internal_02f4d775e67bd2d90d0c10cc2533a951c2c742820a76b49bce9676ada900ae6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<h1 style=\"text-align:center\">Gestionnaire de livres</h1>

   
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        echo "   
";
        
        $__internal_02f4d775e67bd2d90d0c10cc2533a951c2c742820a76b49bce9676ada900ae6f->leave($__internal_02f4d775e67bd2d90d0c10cc2533a951c2c742820a76b49bce9676ada900ae6f_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_e269865b37a8ac85a833c4578c7ce74532b1cfdeedeb255c05022a924e015f78 = $this->env->getExtension("native_profiler");
        $__internal_e269865b37a8ac85a833c4578c7ce74532b1cfdeedeb255c05022a924e015f78->enter($__internal_e269865b37a8ac85a833c4578c7ce74532b1cfdeedeb255c05022a924e015f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e269865b37a8ac85a833c4578c7ce74532b1cfdeedeb255c05022a924e015f78->leave($__internal_e269865b37a8ac85a833c4578c7ce74532b1cfdeedeb255c05022a924e015f78_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  23 => 1,);
    }
}
/* <h1 style="text-align:center">Gestionnaire de livres</h1>*/
/* */
/*    */
/* {% block body %}{%endblock%}   */
/* */
