<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_67df203297ae53eedef7dd578a07ed5b038c60b38209ccb58babe7efb1d78604 extends Twig_Template
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
        $__internal_a0623d7fab31a1f999d6e4b38a376d0bbb812cce6c93c0663e978e79bd87b3ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0623d7fab31a1f999d6e4b38a376d0bbb812cce6c93c0663e978e79bd87b3ce->enter($__internal_a0623d7fab31a1f999d6e4b38a376d0bbb812cce6c93c0663e978e79bd87b3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_c4a49079afe2478f2727adda4246becf552b627cacb009c67c0ca71462b3a46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a49079afe2478f2727adda4246becf552b627cacb009c67c0ca71462b3a46b->enter($__internal_c4a49079afe2478f2727adda4246becf552b627cacb009c67c0ca71462b3a46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a0623d7fab31a1f999d6e4b38a376d0bbb812cce6c93c0663e978e79bd87b3ce->leave($__internal_a0623d7fab31a1f999d6e4b38a376d0bbb812cce6c93c0663e978e79bd87b3ce_prof);

        
        $__internal_c4a49079afe2478f2727adda4246becf552b627cacb009c67c0ca71462b3a46b->leave($__internal_c4a49079afe2478f2727adda4246becf552b627cacb009c67c0ca71462b3a46b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
