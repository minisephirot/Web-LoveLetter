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
        $__internal_dfc063b15ce2a69167cbef1969da326ee6f4724e0c50ce9ae2002c4f9e1a7a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc063b15ce2a69167cbef1969da326ee6f4724e0c50ce9ae2002c4f9e1a7a0a->enter($__internal_dfc063b15ce2a69167cbef1969da326ee6f4724e0c50ce9ae2002c4f9e1a7a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_3d0094df5eef665d3bea3a46c788a7ed52537fe3a5be8b702d761fac6418c0df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0094df5eef665d3bea3a46c788a7ed52537fe3a5be8b702d761fac6418c0df->enter($__internal_3d0094df5eef665d3bea3a46c788a7ed52537fe3a5be8b702d761fac6418c0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_dfc063b15ce2a69167cbef1969da326ee6f4724e0c50ce9ae2002c4f9e1a7a0a->leave($__internal_dfc063b15ce2a69167cbef1969da326ee6f4724e0c50ce9ae2002c4f9e1a7a0a_prof);

        
        $__internal_3d0094df5eef665d3bea3a46c788a7ed52537fe3a5be8b702d761fac6418c0df->leave($__internal_3d0094df5eef665d3bea3a46c788a7ed52537fe3a5be8b702d761fac6418c0df_prof);

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
