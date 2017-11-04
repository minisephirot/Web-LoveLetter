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
        $__internal_f9b2186ef6979e38a66f37458a0184ba88b02b6d619ffc449efcfac8bc89137e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b2186ef6979e38a66f37458a0184ba88b02b6d619ffc449efcfac8bc89137e->enter($__internal_f9b2186ef6979e38a66f37458a0184ba88b02b6d619ffc449efcfac8bc89137e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_0bf4df7e48f7affe2423c9533731a0ce3b46ae53f0bf4d51dfeb468833bb0cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf4df7e48f7affe2423c9533731a0ce3b46ae53f0bf4d51dfeb468833bb0cb5->enter($__internal_0bf4df7e48f7affe2423c9533731a0ce3b46ae53f0bf4d51dfeb468833bb0cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_f9b2186ef6979e38a66f37458a0184ba88b02b6d619ffc449efcfac8bc89137e->leave($__internal_f9b2186ef6979e38a66f37458a0184ba88b02b6d619ffc449efcfac8bc89137e_prof);

        
        $__internal_0bf4df7e48f7affe2423c9533731a0ce3b46ae53f0bf4d51dfeb468833bb0cb5->leave($__internal_0bf4df7e48f7affe2423c9533731a0ce3b46ae53f0bf4d51dfeb468833bb0cb5_prof);

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
