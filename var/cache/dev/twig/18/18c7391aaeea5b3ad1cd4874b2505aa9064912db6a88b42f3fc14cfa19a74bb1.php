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
        $__internal_d54915a0585854d9dbbd7c45d1e523d16d7070e50ec8703754e9da3804ec905e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54915a0585854d9dbbd7c45d1e523d16d7070e50ec8703754e9da3804ec905e->enter($__internal_d54915a0585854d9dbbd7c45d1e523d16d7070e50ec8703754e9da3804ec905e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_5d43b10d30c3206fe31e3afa2abe6f04247c448617c4da2a01c2ddcaa873b689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d43b10d30c3206fe31e3afa2abe6f04247c448617c4da2a01c2ddcaa873b689->enter($__internal_5d43b10d30c3206fe31e3afa2abe6f04247c448617c4da2a01c2ddcaa873b689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_d54915a0585854d9dbbd7c45d1e523d16d7070e50ec8703754e9da3804ec905e->leave($__internal_d54915a0585854d9dbbd7c45d1e523d16d7070e50ec8703754e9da3804ec905e_prof);

        
        $__internal_5d43b10d30c3206fe31e3afa2abe6f04247c448617c4da2a01c2ddcaa873b689->leave($__internal_5d43b10d30c3206fe31e3afa2abe6f04247c448617c4da2a01c2ddcaa873b689_prof);

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
