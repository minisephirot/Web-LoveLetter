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
        $__internal_6fce61057c6a66290a467697877cd3a8bb3194308b17a986ce0a56904cf31b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fce61057c6a66290a467697877cd3a8bb3194308b17a986ce0a56904cf31b75->enter($__internal_6fce61057c6a66290a467697877cd3a8bb3194308b17a986ce0a56904cf31b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_014dc6190a538306c0bbf54df9f4d54cddbdf35a2a80691c79c15572a11a3b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014dc6190a538306c0bbf54df9f4d54cddbdf35a2a80691c79c15572a11a3b4d->enter($__internal_014dc6190a538306c0bbf54df9f4d54cddbdf35a2a80691c79c15572a11a3b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6fce61057c6a66290a467697877cd3a8bb3194308b17a986ce0a56904cf31b75->leave($__internal_6fce61057c6a66290a467697877cd3a8bb3194308b17a986ce0a56904cf31b75_prof);

        
        $__internal_014dc6190a538306c0bbf54df9f4d54cddbdf35a2a80691c79c15572a11a3b4d->leave($__internal_014dc6190a538306c0bbf54df9f4d54cddbdf35a2a80691c79c15572a11a3b4d_prof);

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
