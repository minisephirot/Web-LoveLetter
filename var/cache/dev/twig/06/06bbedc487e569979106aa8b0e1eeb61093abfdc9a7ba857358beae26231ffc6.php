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
        $__internal_82c0ed2d5c4bb2b81ece9f73b7dec3adf8fabf8e2da09c448e2b23c32f041fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c0ed2d5c4bb2b81ece9f73b7dec3adf8fabf8e2da09c448e2b23c32f041fcc->enter($__internal_82c0ed2d5c4bb2b81ece9f73b7dec3adf8fabf8e2da09c448e2b23c32f041fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_da539bbfadee0efb35323d57694077c1a15e7062bc50d7413551c113b318a5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da539bbfadee0efb35323d57694077c1a15e7062bc50d7413551c113b318a5e5->enter($__internal_da539bbfadee0efb35323d57694077c1a15e7062bc50d7413551c113b318a5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_82c0ed2d5c4bb2b81ece9f73b7dec3adf8fabf8e2da09c448e2b23c32f041fcc->leave($__internal_82c0ed2d5c4bb2b81ece9f73b7dec3adf8fabf8e2da09c448e2b23c32f041fcc_prof);

        
        $__internal_da539bbfadee0efb35323d57694077c1a15e7062bc50d7413551c113b318a5e5->leave($__internal_da539bbfadee0efb35323d57694077c1a15e7062bc50d7413551c113b318a5e5_prof);

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
