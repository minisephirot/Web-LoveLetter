<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1680dd061a058fb299f0a187bafa7963a4019ef1447caa7231fd9d04326427aa extends Twig_Template
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
        $__internal_2dd562b5be8bd3a74a954cc755cae16ca0ced71293b0d45a9d2eec9fc7ba4da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd562b5be8bd3a74a954cc755cae16ca0ced71293b0d45a9d2eec9fc7ba4da4->enter($__internal_2dd562b5be8bd3a74a954cc755cae16ca0ced71293b0d45a9d2eec9fc7ba4da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_9953878d774ed69d59bd93494833e461c91688a2266f0ed62adc3c00208b46fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9953878d774ed69d59bd93494833e461c91688a2266f0ed62adc3c00208b46fc->enter($__internal_9953878d774ed69d59bd93494833e461c91688a2266f0ed62adc3c00208b46fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2dd562b5be8bd3a74a954cc755cae16ca0ced71293b0d45a9d2eec9fc7ba4da4->leave($__internal_2dd562b5be8bd3a74a954cc755cae16ca0ced71293b0d45a9d2eec9fc7ba4da4_prof);

        
        $__internal_9953878d774ed69d59bd93494833e461c91688a2266f0ed62adc3c00208b46fc->leave($__internal_9953878d774ed69d59bd93494833e461c91688a2266f0ed62adc3c00208b46fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
