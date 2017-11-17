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
        $__internal_a90950c2c322e5ea10ed746d6d99860086b321efe5930a4e04cf5cc519bdc220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90950c2c322e5ea10ed746d6d99860086b321efe5930a4e04cf5cc519bdc220->enter($__internal_a90950c2c322e5ea10ed746d6d99860086b321efe5930a4e04cf5cc519bdc220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_87a026e55722f7069afc9cddd212b3122f4a0137d91110dc458a13d8a4828ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a026e55722f7069afc9cddd212b3122f4a0137d91110dc458a13d8a4828ddd->enter($__internal_87a026e55722f7069afc9cddd212b3122f4a0137d91110dc458a13d8a4828ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a90950c2c322e5ea10ed746d6d99860086b321efe5930a4e04cf5cc519bdc220->leave($__internal_a90950c2c322e5ea10ed746d6d99860086b321efe5930a4e04cf5cc519bdc220_prof);

        
        $__internal_87a026e55722f7069afc9cddd212b3122f4a0137d91110dc458a13d8a4828ddd->leave($__internal_87a026e55722f7069afc9cddd212b3122f4a0137d91110dc458a13d8a4828ddd_prof);

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
