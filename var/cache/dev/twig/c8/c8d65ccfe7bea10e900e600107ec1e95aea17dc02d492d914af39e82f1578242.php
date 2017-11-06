<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1f2832e6c8748e6a985b4ff35d952d8f3054518b38c88a3b7efa9ca8915d2cff extends Twig_Template
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
        $__internal_98b858372c748ae27a4a3bbdf64f21c5bf39fd80dfdd2bd08c3dd806d54a1968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b858372c748ae27a4a3bbdf64f21c5bf39fd80dfdd2bd08c3dd806d54a1968->enter($__internal_98b858372c748ae27a4a3bbdf64f21c5bf39fd80dfdd2bd08c3dd806d54a1968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_55c7360170af56f1d2fa81fe84198244adf7fae2d7adb5daa9ed4e6c5846410a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c7360170af56f1d2fa81fe84198244adf7fae2d7adb5daa9ed4e6c5846410a->enter($__internal_55c7360170af56f1d2fa81fe84198244adf7fae2d7adb5daa9ed4e6c5846410a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_98b858372c748ae27a4a3bbdf64f21c5bf39fd80dfdd2bd08c3dd806d54a1968->leave($__internal_98b858372c748ae27a4a3bbdf64f21c5bf39fd80dfdd2bd08c3dd806d54a1968_prof);

        
        $__internal_55c7360170af56f1d2fa81fe84198244adf7fae2d7adb5daa9ed4e6c5846410a->leave($__internal_55c7360170af56f1d2fa81fe84198244adf7fae2d7adb5daa9ed4e6c5846410a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
