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
        $__internal_cf0f25f09647341d3c3408eccbcdcb8e4066cc524c9147deee3f77d08005f358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0f25f09647341d3c3408eccbcdcb8e4066cc524c9147deee3f77d08005f358->enter($__internal_cf0f25f09647341d3c3408eccbcdcb8e4066cc524c9147deee3f77d08005f358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_acba89b00b013533628fe0f3b748d6aa35848b6c9dcfd889e5c3e6b18ae1b8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acba89b00b013533628fe0f3b748d6aa35848b6c9dcfd889e5c3e6b18ae1b8ae->enter($__internal_acba89b00b013533628fe0f3b748d6aa35848b6c9dcfd889e5c3e6b18ae1b8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_cf0f25f09647341d3c3408eccbcdcb8e4066cc524c9147deee3f77d08005f358->leave($__internal_cf0f25f09647341d3c3408eccbcdcb8e4066cc524c9147deee3f77d08005f358_prof);

        
        $__internal_acba89b00b013533628fe0f3b748d6aa35848b6c9dcfd889e5c3e6b18ae1b8ae->leave($__internal_acba89b00b013533628fe0f3b748d6aa35848b6c9dcfd889e5c3e6b18ae1b8ae_prof);

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
