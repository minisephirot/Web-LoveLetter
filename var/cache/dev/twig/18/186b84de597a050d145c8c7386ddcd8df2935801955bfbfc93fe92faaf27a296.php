<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_f2298376ca530357c4d991fd4c0af6657e3b20345e3eb9058b20888450262094 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea9b446e170e1a9105759b4933ac3eff096d34511274ba6e03724d29a1151828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea9b446e170e1a9105759b4933ac3eff096d34511274ba6e03724d29a1151828->enter($__internal_ea9b446e170e1a9105759b4933ac3eff096d34511274ba6e03724d29a1151828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_da6ec936c55183ef2a9eafe05930f470a4b7dc502c1d2b89e14b0704ac0e372e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6ec936c55183ef2a9eafe05930f470a4b7dc502c1d2b89e14b0704ac0e372e->enter($__internal_da6ec936c55183ef2a9eafe05930f470a4b7dc502c1d2b89e14b0704ac0e372e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_ea9b446e170e1a9105759b4933ac3eff096d34511274ba6e03724d29a1151828->leave($__internal_ea9b446e170e1a9105759b4933ac3eff096d34511274ba6e03724d29a1151828_prof);

        
        $__internal_da6ec936c55183ef2a9eafe05930f470a4b7dc502c1d2b89e14b0704ac0e372e->leave($__internal_da6ec936c55183ef2a9eafe05930f470a4b7dc502c1d2b89e14b0704ac0e372e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
