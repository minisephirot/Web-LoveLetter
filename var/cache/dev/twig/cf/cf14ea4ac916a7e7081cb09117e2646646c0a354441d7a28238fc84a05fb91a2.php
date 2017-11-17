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
        $__internal_9e41521c0a508b7d3fbc979bf10632d6ff55ac2dd8fc401c0245e5ff370230a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e41521c0a508b7d3fbc979bf10632d6ff55ac2dd8fc401c0245e5ff370230a7->enter($__internal_9e41521c0a508b7d3fbc979bf10632d6ff55ac2dd8fc401c0245e5ff370230a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_9d861d1067f44fe68ced536ea649f78a1cce47294a55c088490d9e4566b8c2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d861d1067f44fe68ced536ea649f78a1cce47294a55c088490d9e4566b8c2df->enter($__internal_9d861d1067f44fe68ced536ea649f78a1cce47294a55c088490d9e4566b8c2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9e41521c0a508b7d3fbc979bf10632d6ff55ac2dd8fc401c0245e5ff370230a7->leave($__internal_9e41521c0a508b7d3fbc979bf10632d6ff55ac2dd8fc401c0245e5ff370230a7_prof);

        
        $__internal_9d861d1067f44fe68ced536ea649f78a1cce47294a55c088490d9e4566b8c2df->leave($__internal_9d861d1067f44fe68ced536ea649f78a1cce47294a55c088490d9e4566b8c2df_prof);

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
