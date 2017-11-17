<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d3b05c5963201c9e56e99730e6389dd766089796f54a34af144dfc9e775820d5 extends Twig_Template
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
        $__internal_09dd598cd29db1bd7742ed23a269c9c19c26afdfb6386d00efda2864da255b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09dd598cd29db1bd7742ed23a269c9c19c26afdfb6386d00efda2864da255b7c->enter($__internal_09dd598cd29db1bd7742ed23a269c9c19c26afdfb6386d00efda2864da255b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_050a277a56a3e239a0d3ee90c4443209354ff7d2a7ff6b3788ac36436a518299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050a277a56a3e239a0d3ee90c4443209354ff7d2a7ff6b3788ac36436a518299->enter($__internal_050a277a56a3e239a0d3ee90c4443209354ff7d2a7ff6b3788ac36436a518299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_09dd598cd29db1bd7742ed23a269c9c19c26afdfb6386d00efda2864da255b7c->leave($__internal_09dd598cd29db1bd7742ed23a269c9c19c26afdfb6386d00efda2864da255b7c_prof);

        
        $__internal_050a277a56a3e239a0d3ee90c4443209354ff7d2a7ff6b3788ac36436a518299->leave($__internal_050a277a56a3e239a0d3ee90c4443209354ff7d2a7ff6b3788ac36436a518299_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
