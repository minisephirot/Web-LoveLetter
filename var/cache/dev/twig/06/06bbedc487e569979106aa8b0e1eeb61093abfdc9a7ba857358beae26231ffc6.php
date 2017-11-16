<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7a65e2a9bbf4ce00847a826ee8c05a21954b62b953fcab9da798367070afea48 extends Twig_Template
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
        $__internal_8e50bd47084d0d79771e53e822ff1a31273e15b364d476effdd8bb395b461c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e50bd47084d0d79771e53e822ff1a31273e15b364d476effdd8bb395b461c11->enter($__internal_8e50bd47084d0d79771e53e822ff1a31273e15b364d476effdd8bb395b461c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_269581e5aa5adc6f5e124a7d917fd26ab309f35fa1ee59aa64525f5c94710c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269581e5aa5adc6f5e124a7d917fd26ab309f35fa1ee59aa64525f5c94710c42->enter($__internal_269581e5aa5adc6f5e124a7d917fd26ab309f35fa1ee59aa64525f5c94710c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8e50bd47084d0d79771e53e822ff1a31273e15b364d476effdd8bb395b461c11->leave($__internal_8e50bd47084d0d79771e53e822ff1a31273e15b364d476effdd8bb395b461c11_prof);

        
        $__internal_269581e5aa5adc6f5e124a7d917fd26ab309f35fa1ee59aa64525f5c94710c42->leave($__internal_269581e5aa5adc6f5e124a7d917fd26ab309f35fa1ee59aa64525f5c94710c42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
