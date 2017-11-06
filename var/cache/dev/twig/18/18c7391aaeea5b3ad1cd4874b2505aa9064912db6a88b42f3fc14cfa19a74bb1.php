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
        $__internal_2d0bd680fddd34f723504dd9a896d80aeee2a80b0827b89a50081261c916b35d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0bd680fddd34f723504dd9a896d80aeee2a80b0827b89a50081261c916b35d->enter($__internal_2d0bd680fddd34f723504dd9a896d80aeee2a80b0827b89a50081261c916b35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_c38654c29942a3d2d5d131a8bd6b19eabe37883b7865a30da8af902556bab094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38654c29942a3d2d5d131a8bd6b19eabe37883b7865a30da8af902556bab094->enter($__internal_c38654c29942a3d2d5d131a8bd6b19eabe37883b7865a30da8af902556bab094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_2d0bd680fddd34f723504dd9a896d80aeee2a80b0827b89a50081261c916b35d->leave($__internal_2d0bd680fddd34f723504dd9a896d80aeee2a80b0827b89a50081261c916b35d_prof);

        
        $__internal_c38654c29942a3d2d5d131a8bd6b19eabe37883b7865a30da8af902556bab094->leave($__internal_c38654c29942a3d2d5d131a8bd6b19eabe37883b7865a30da8af902556bab094_prof);

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
