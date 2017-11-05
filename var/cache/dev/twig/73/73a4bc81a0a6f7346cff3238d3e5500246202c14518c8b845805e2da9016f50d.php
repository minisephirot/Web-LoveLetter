<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a1278650c05506634c3c4de2f22add4c021c2d2193b992ba8674a98b0a1b7938 extends Twig_Template
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
        $__internal_b4d614da852e4b43a07d4327f62faf5b53455cbb79cddb25a1f9b6c84f1e6064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d614da852e4b43a07d4327f62faf5b53455cbb79cddb25a1f9b6c84f1e6064->enter($__internal_b4d614da852e4b43a07d4327f62faf5b53455cbb79cddb25a1f9b6c84f1e6064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_a4ee426c01ca42789454e03d78763af3aff8a6aa13c712a2686a1271b3e13ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ee426c01ca42789454e03d78763af3aff8a6aa13c712a2686a1271b3e13ae7->enter($__internal_a4ee426c01ca42789454e03d78763af3aff8a6aa13c712a2686a1271b3e13ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_b4d614da852e4b43a07d4327f62faf5b53455cbb79cddb25a1f9b6c84f1e6064->leave($__internal_b4d614da852e4b43a07d4327f62faf5b53455cbb79cddb25a1f9b6c84f1e6064_prof);

        
        $__internal_a4ee426c01ca42789454e03d78763af3aff8a6aa13c712a2686a1271b3e13ae7->leave($__internal_a4ee426c01ca42789454e03d78763af3aff8a6aa13c712a2686a1271b3e13ae7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
