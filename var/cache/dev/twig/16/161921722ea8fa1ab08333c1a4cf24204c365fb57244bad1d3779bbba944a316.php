<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_6641423b61dd5aa1670dbbded80679612ee67a6cb5a8836bde4fcb2e105c957b extends Twig_Template
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
        $__internal_73c4e6425af5fcaef3c1331bd4ac37c6b0699090fb1b7e76edbf916d07823080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c4e6425af5fcaef3c1331bd4ac37c6b0699090fb1b7e76edbf916d07823080->enter($__internal_73c4e6425af5fcaef3c1331bd4ac37c6b0699090fb1b7e76edbf916d07823080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_28992a99da419681b571b9b82e8f7c1773a589497a1241c5e237b405cd7fc549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28992a99da419681b571b9b82e8f7c1773a589497a1241c5e237b405cd7fc549->enter($__internal_28992a99da419681b571b9b82e8f7c1773a589497a1241c5e237b405cd7fc549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_73c4e6425af5fcaef3c1331bd4ac37c6b0699090fb1b7e76edbf916d07823080->leave($__internal_73c4e6425af5fcaef3c1331bd4ac37c6b0699090fb1b7e76edbf916d07823080_prof);

        
        $__internal_28992a99da419681b571b9b82e8f7c1773a589497a1241c5e237b405cd7fc549->leave($__internal_28992a99da419681b571b9b82e8f7c1773a589497a1241c5e237b405cd7fc549_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
