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
        $__internal_dd069ae1b36b036d7c3b771c0a3a54a52052cd6d8fd53b27054f607a4e1168fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd069ae1b36b036d7c3b771c0a3a54a52052cd6d8fd53b27054f607a4e1168fa->enter($__internal_dd069ae1b36b036d7c3b771c0a3a54a52052cd6d8fd53b27054f607a4e1168fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_d0ad0f80e174e18b307a39debf95c9af5685290382469e08f7c561188efae00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ad0f80e174e18b307a39debf95c9af5685290382469e08f7c561188efae00e->enter($__internal_d0ad0f80e174e18b307a39debf95c9af5685290382469e08f7c561188efae00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_dd069ae1b36b036d7c3b771c0a3a54a52052cd6d8fd53b27054f607a4e1168fa->leave($__internal_dd069ae1b36b036d7c3b771c0a3a54a52052cd6d8fd53b27054f607a4e1168fa_prof);

        
        $__internal_d0ad0f80e174e18b307a39debf95c9af5685290382469e08f7c561188efae00e->leave($__internal_d0ad0f80e174e18b307a39debf95c9af5685290382469e08f7c561188efae00e_prof);

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
