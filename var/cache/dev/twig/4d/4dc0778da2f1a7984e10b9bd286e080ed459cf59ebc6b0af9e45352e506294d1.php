<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_050fd7f7fe1eecdedb1f25b19809d449b2f59f1c11c9218dc3af15709d46c53e extends Twig_Template
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
        $__internal_1de50979e54d79cebbe0af19fe7406b9d17e56fa6d00b7c861492befa7f3ec3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de50979e54d79cebbe0af19fe7406b9d17e56fa6d00b7c861492befa7f3ec3b->enter($__internal_1de50979e54d79cebbe0af19fe7406b9d17e56fa6d00b7c861492befa7f3ec3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_1fb3b7ec8a06d906133a66bfc26e01162376aebb4dd8c5c0b3e8233ff3ca2724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb3b7ec8a06d906133a66bfc26e01162376aebb4dd8c5c0b3e8233ff3ca2724->enter($__internal_1fb3b7ec8a06d906133a66bfc26e01162376aebb4dd8c5c0b3e8233ff3ca2724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1de50979e54d79cebbe0af19fe7406b9d17e56fa6d00b7c861492befa7f3ec3b->leave($__internal_1de50979e54d79cebbe0af19fe7406b9d17e56fa6d00b7c861492befa7f3ec3b_prof);

        
        $__internal_1fb3b7ec8a06d906133a66bfc26e01162376aebb4dd8c5c0b3e8233ff3ca2724->leave($__internal_1fb3b7ec8a06d906133a66bfc26e01162376aebb4dd8c5c0b3e8233ff3ca2724_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
