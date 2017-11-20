<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_58012c3dc7a5560e8553a854aa2eea0deaab9bc108adf38b98c9f74b14727bad extends Twig_Template
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
        $__internal_d237b20fe9af2a3efc86f9c309fb62046cbbaccc5d8a6ec650e8a9a2acea9168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d237b20fe9af2a3efc86f9c309fb62046cbbaccc5d8a6ec650e8a9a2acea9168->enter($__internal_d237b20fe9af2a3efc86f9c309fb62046cbbaccc5d8a6ec650e8a9a2acea9168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_731e587798d9fb4b9d9e3698f9aec2adfbd91859f29cd9e048ead1abfd6b9e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731e587798d9fb4b9d9e3698f9aec2adfbd91859f29cd9e048ead1abfd6b9e5c->enter($__internal_731e587798d9fb4b9d9e3698f9aec2adfbd91859f29cd9e048ead1abfd6b9e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d237b20fe9af2a3efc86f9c309fb62046cbbaccc5d8a6ec650e8a9a2acea9168->leave($__internal_d237b20fe9af2a3efc86f9c309fb62046cbbaccc5d8a6ec650e8a9a2acea9168_prof);

        
        $__internal_731e587798d9fb4b9d9e3698f9aec2adfbd91859f29cd9e048ead1abfd6b9e5c->leave($__internal_731e587798d9fb4b9d9e3698f9aec2adfbd91859f29cd9e048ead1abfd6b9e5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
