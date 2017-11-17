<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_08ce1f85b52df0e36299695d81004c39d050e2ea3cfb20d84f60005d0683ad27 extends Twig_Template
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
        $__internal_babea69d7d80593b30f6a7dd49a2c4958dafde36b41c7d029704375cf286df4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babea69d7d80593b30f6a7dd49a2c4958dafde36b41c7d029704375cf286df4c->enter($__internal_babea69d7d80593b30f6a7dd49a2c4958dafde36b41c7d029704375cf286df4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_d86fc3331bf437bac9abad667350027cbdd0d4f833a55b2a74f4a66d6b0e18b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86fc3331bf437bac9abad667350027cbdd0d4f833a55b2a74f4a66d6b0e18b3->enter($__internal_d86fc3331bf437bac9abad667350027cbdd0d4f833a55b2a74f4a66d6b0e18b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_babea69d7d80593b30f6a7dd49a2c4958dafde36b41c7d029704375cf286df4c->leave($__internal_babea69d7d80593b30f6a7dd49a2c4958dafde36b41c7d029704375cf286df4c_prof);

        
        $__internal_d86fc3331bf437bac9abad667350027cbdd0d4f833a55b2a74f4a66d6b0e18b3->leave($__internal_d86fc3331bf437bac9abad667350027cbdd0d4f833a55b2a74f4a66d6b0e18b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
