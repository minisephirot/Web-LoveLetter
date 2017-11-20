<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_edd4f42be52bce9ef062555dccbaff0c12af8e8d52c87a6e36b4e526b298f0ce extends Twig_Template
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
        $__internal_e5b394e700558d9f1cec6f96cf4a901d3ea0c9e7d5b6e6c9d099c5a91889154a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b394e700558d9f1cec6f96cf4a901d3ea0c9e7d5b6e6c9d099c5a91889154a->enter($__internal_e5b394e700558d9f1cec6f96cf4a901d3ea0c9e7d5b6e6c9d099c5a91889154a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_51042a02e22c1b2c5803fb0692744e04c6d7a1e9b82ff88e634b0762da84c063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51042a02e22c1b2c5803fb0692744e04c6d7a1e9b82ff88e634b0762da84c063->enter($__internal_51042a02e22c1b2c5803fb0692744e04c6d7a1e9b82ff88e634b0762da84c063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_e5b394e700558d9f1cec6f96cf4a901d3ea0c9e7d5b6e6c9d099c5a91889154a->leave($__internal_e5b394e700558d9f1cec6f96cf4a901d3ea0c9e7d5b6e6c9d099c5a91889154a_prof);

        
        $__internal_51042a02e22c1b2c5803fb0692744e04c6d7a1e9b82ff88e634b0762da84c063->leave($__internal_51042a02e22c1b2c5803fb0692744e04c6d7a1e9b82ff88e634b0762da84c063_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
