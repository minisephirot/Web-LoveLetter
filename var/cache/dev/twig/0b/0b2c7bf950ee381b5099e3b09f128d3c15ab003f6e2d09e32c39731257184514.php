<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_09470b55fecec64e262f8615ffc52b8b34bc014948ff5ae9ab1678c52455a790 extends Twig_Template
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
        $__internal_0c9b1427dd78dc5a1f2e2e90ce28e9abb26576a9a8a199cb104c3b7d8c0c5969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c9b1427dd78dc5a1f2e2e90ce28e9abb26576a9a8a199cb104c3b7d8c0c5969->enter($__internal_0c9b1427dd78dc5a1f2e2e90ce28e9abb26576a9a8a199cb104c3b7d8c0c5969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_18c6aba67bf7d0dcd619b351277a3c2033c70edcb42ae271a9c987987f49195d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c6aba67bf7d0dcd619b351277a3c2033c70edcb42ae271a9c987987f49195d->enter($__internal_18c6aba67bf7d0dcd619b351277a3c2033c70edcb42ae271a9c987987f49195d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_0c9b1427dd78dc5a1f2e2e90ce28e9abb26576a9a8a199cb104c3b7d8c0c5969->leave($__internal_0c9b1427dd78dc5a1f2e2e90ce28e9abb26576a9a8a199cb104c3b7d8c0c5969_prof);

        
        $__internal_18c6aba67bf7d0dcd619b351277a3c2033c70edcb42ae271a9c987987f49195d->leave($__internal_18c6aba67bf7d0dcd619b351277a3c2033c70edcb42ae271a9c987987f49195d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
