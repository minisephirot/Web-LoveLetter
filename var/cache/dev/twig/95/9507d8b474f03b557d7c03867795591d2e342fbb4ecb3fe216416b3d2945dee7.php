<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_316d22b0e3178201a79bf30df7f164418cb94ee3324c1ed9bf8e64b8c125b6dc extends Twig_Template
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
        $__internal_9595bb711e64e336f7434048022897dfc0f57b6dc5779c294f34262985daa3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9595bb711e64e336f7434048022897dfc0f57b6dc5779c294f34262985daa3be->enter($__internal_9595bb711e64e336f7434048022897dfc0f57b6dc5779c294f34262985daa3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d88a10d0737ae04990c42c3781964665e2497533da487e3d4f797479f3c76417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88a10d0737ae04990c42c3781964665e2497533da487e3d4f797479f3c76417->enter($__internal_d88a10d0737ae04990c42c3781964665e2497533da487e3d4f797479f3c76417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9595bb711e64e336f7434048022897dfc0f57b6dc5779c294f34262985daa3be->leave($__internal_9595bb711e64e336f7434048022897dfc0f57b6dc5779c294f34262985daa3be_prof);

        
        $__internal_d88a10d0737ae04990c42c3781964665e2497533da487e3d4f797479f3c76417->leave($__internal_d88a10d0737ae04990c42c3781964665e2497533da487e3d4f797479f3c76417_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
