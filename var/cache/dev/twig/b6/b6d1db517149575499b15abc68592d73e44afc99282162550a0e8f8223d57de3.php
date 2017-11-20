<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_29514805f766e8ba6f2f277e9cd6df4d52460ca4cc489c046f3d7cb7850c3546 extends Twig_Template
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
        $__internal_0860bc4adc3939d912e2fcde7277bdf994644b0eae3b0fdf6dcb90639d29e04f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0860bc4adc3939d912e2fcde7277bdf994644b0eae3b0fdf6dcb90639d29e04f->enter($__internal_0860bc4adc3939d912e2fcde7277bdf994644b0eae3b0fdf6dcb90639d29e04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a9b4bcf1551d1c3ec981db3dbbf791c9049d88b7019980be26d3c0e02d697790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b4bcf1551d1c3ec981db3dbbf791c9049d88b7019980be26d3c0e02d697790->enter($__internal_a9b4bcf1551d1c3ec981db3dbbf791c9049d88b7019980be26d3c0e02d697790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0860bc4adc3939d912e2fcde7277bdf994644b0eae3b0fdf6dcb90639d29e04f->leave($__internal_0860bc4adc3939d912e2fcde7277bdf994644b0eae3b0fdf6dcb90639d29e04f_prof);

        
        $__internal_a9b4bcf1551d1c3ec981db3dbbf791c9049d88b7019980be26d3c0e02d697790->leave($__internal_a9b4bcf1551d1c3ec981db3dbbf791c9049d88b7019980be26d3c0e02d697790_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
