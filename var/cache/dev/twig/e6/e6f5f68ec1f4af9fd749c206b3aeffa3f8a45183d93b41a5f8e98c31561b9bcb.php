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
        $__internal_aa58c8cf2d09970a7b0097579d49dd008c26c2f665b0b46893ad342b283e463e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa58c8cf2d09970a7b0097579d49dd008c26c2f665b0b46893ad342b283e463e->enter($__internal_aa58c8cf2d09970a7b0097579d49dd008c26c2f665b0b46893ad342b283e463e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_666c8906bb07ad4d8ddf28658b75a26cb745d99be4ca7cb00f1b046a2aa755b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666c8906bb07ad4d8ddf28658b75a26cb745d99be4ca7cb00f1b046a2aa755b5->enter($__internal_666c8906bb07ad4d8ddf28658b75a26cb745d99be4ca7cb00f1b046a2aa755b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_aa58c8cf2d09970a7b0097579d49dd008c26c2f665b0b46893ad342b283e463e->leave($__internal_aa58c8cf2d09970a7b0097579d49dd008c26c2f665b0b46893ad342b283e463e_prof);

        
        $__internal_666c8906bb07ad4d8ddf28658b75a26cb745d99be4ca7cb00f1b046a2aa755b5->leave($__internal_666c8906bb07ad4d8ddf28658b75a26cb745d99be4ca7cb00f1b046a2aa755b5_prof);

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
