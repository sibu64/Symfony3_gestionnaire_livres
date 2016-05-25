<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d10fac9bbd8223d356c091d6dbb897b516536e0785b3c5b34cded0b345514382 extends Twig_Template
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
        $__internal_b5330911eb4bd47670b1a8e5fc3e392535346d8a70216bbee2c3259feca9f237 = $this->env->getExtension("native_profiler");
        $__internal_b5330911eb4bd47670b1a8e5fc3e392535346d8a70216bbee2c3259feca9f237->enter($__internal_b5330911eb4bd47670b1a8e5fc3e392535346d8a70216bbee2c3259feca9f237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5330911eb4bd47670b1a8e5fc3e392535346d8a70216bbee2c3259feca9f237->leave($__internal_b5330911eb4bd47670b1a8e5fc3e392535346d8a70216bbee2c3259feca9f237_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a98746298a2281232b6e7004e3ad3a4bf641abb24a77a369e38525603d866393 = $this->env->getExtension("native_profiler");
        $__internal_a98746298a2281232b6e7004e3ad3a4bf641abb24a77a369e38525603d866393->enter($__internal_a98746298a2281232b6e7004e3ad3a4bf641abb24a77a369e38525603d866393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a98746298a2281232b6e7004e3ad3a4bf641abb24a77a369e38525603d866393->leave($__internal_a98746298a2281232b6e7004e3ad3a4bf641abb24a77a369e38525603d866393_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8cfb746458794969d36a59c0bd48b2bdf85709df884e5e1913365c5218bbd5f0 = $this->env->getExtension("native_profiler");
        $__internal_8cfb746458794969d36a59c0bd48b2bdf85709df884e5e1913365c5218bbd5f0->enter($__internal_8cfb746458794969d36a59c0bd48b2bdf85709df884e5e1913365c5218bbd5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8cfb746458794969d36a59c0bd48b2bdf85709df884e5e1913365c5218bbd5f0->leave($__internal_8cfb746458794969d36a59c0bd48b2bdf85709df884e5e1913365c5218bbd5f0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_78731197af81265cdae8448467f84d0422426bd8fe42d3158350f59bce882ebb = $this->env->getExtension("native_profiler");
        $__internal_78731197af81265cdae8448467f84d0422426bd8fe42d3158350f59bce882ebb->enter($__internal_78731197af81265cdae8448467f84d0422426bd8fe42d3158350f59bce882ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_78731197af81265cdae8448467f84d0422426bd8fe42d3158350f59bce882ebb->leave($__internal_78731197af81265cdae8448467f84d0422426bd8fe42d3158350f59bce882ebb_prof);

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
