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
        $__internal_85eef0e619e4999ef1ce767dd4005ac98f683f37632cf8b3ccb12cbcd8ffb1ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85eef0e619e4999ef1ce767dd4005ac98f683f37632cf8b3ccb12cbcd8ffb1ec->enter($__internal_85eef0e619e4999ef1ce767dd4005ac98f683f37632cf8b3ccb12cbcd8ffb1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_15b5c11c7cc6bd415bfec201c360b4dbbd4ef11119f4f603072bc893a4fd5650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b5c11c7cc6bd415bfec201c360b4dbbd4ef11119f4f603072bc893a4fd5650->enter($__internal_15b5c11c7cc6bd415bfec201c360b4dbbd4ef11119f4f603072bc893a4fd5650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_85eef0e619e4999ef1ce767dd4005ac98f683f37632cf8b3ccb12cbcd8ffb1ec->leave($__internal_85eef0e619e4999ef1ce767dd4005ac98f683f37632cf8b3ccb12cbcd8ffb1ec_prof);

        
        $__internal_15b5c11c7cc6bd415bfec201c360b4dbbd4ef11119f4f603072bc893a4fd5650->leave($__internal_15b5c11c7cc6bd415bfec201c360b4dbbd4ef11119f4f603072bc893a4fd5650_prof);

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
