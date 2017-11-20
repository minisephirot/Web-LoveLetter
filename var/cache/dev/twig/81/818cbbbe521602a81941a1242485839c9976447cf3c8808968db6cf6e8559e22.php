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
        $__internal_d4ebc157c3110d814cfae2371c2379c48d99865541636da785ab9cdadeaf73da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ebc157c3110d814cfae2371c2379c48d99865541636da785ab9cdadeaf73da->enter($__internal_d4ebc157c3110d814cfae2371c2379c48d99865541636da785ab9cdadeaf73da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_d5d50a8fc35d9bd2dea33287eebf3e91325f9b325915fb77c9cc3490b2631836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d50a8fc35d9bd2dea33287eebf3e91325f9b325915fb77c9cc3490b2631836->enter($__internal_d5d50a8fc35d9bd2dea33287eebf3e91325f9b325915fb77c9cc3490b2631836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_d4ebc157c3110d814cfae2371c2379c48d99865541636da785ab9cdadeaf73da->leave($__internal_d4ebc157c3110d814cfae2371c2379c48d99865541636da785ab9cdadeaf73da_prof);

        
        $__internal_d5d50a8fc35d9bd2dea33287eebf3e91325f9b325915fb77c9cc3490b2631836->leave($__internal_d5d50a8fc35d9bd2dea33287eebf3e91325f9b325915fb77c9cc3490b2631836_prof);

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
