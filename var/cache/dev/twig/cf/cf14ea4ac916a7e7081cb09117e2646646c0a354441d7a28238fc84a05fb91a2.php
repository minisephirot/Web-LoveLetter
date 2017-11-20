<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2f089b3a69169d1f04065670b6e6928fff13bb3b4137052a7be721311fd8ec82 extends Twig_Template
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
        $__internal_f77a562eb73ec50979983c8fc48141613faa19664f11e75a95ff9b78f15e9511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77a562eb73ec50979983c8fc48141613faa19664f11e75a95ff9b78f15e9511->enter($__internal_f77a562eb73ec50979983c8fc48141613faa19664f11e75a95ff9b78f15e9511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a092033b0d59b5febb32cd4d714b6333d9c0219dd1640a0c0cc70e3646d87ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a092033b0d59b5febb32cd4d714b6333d9c0219dd1640a0c0cc70e3646d87ed2->enter($__internal_a092033b0d59b5febb32cd4d714b6333d9c0219dd1640a0c0cc70e3646d87ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f77a562eb73ec50979983c8fc48141613faa19664f11e75a95ff9b78f15e9511->leave($__internal_f77a562eb73ec50979983c8fc48141613faa19664f11e75a95ff9b78f15e9511_prof);

        
        $__internal_a092033b0d59b5febb32cd4d714b6333d9c0219dd1640a0c0cc70e3646d87ed2->leave($__internal_a092033b0d59b5febb32cd4d714b6333d9c0219dd1640a0c0cc70e3646d87ed2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
