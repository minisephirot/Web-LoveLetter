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
        $__internal_0d199d9631a3ee78cc34db4f4ede3f6aaf245aceba8777661e9f7e4448d7a271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d199d9631a3ee78cc34db4f4ede3f6aaf245aceba8777661e9f7e4448d7a271->enter($__internal_0d199d9631a3ee78cc34db4f4ede3f6aaf245aceba8777661e9f7e4448d7a271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_0bd14f8bd2547810859bdd906bf074daf0f89e593c36be0fd419d21fd77d3b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd14f8bd2547810859bdd906bf074daf0f89e593c36be0fd419d21fd77d3b5e->enter($__internal_0bd14f8bd2547810859bdd906bf074daf0f89e593c36be0fd419d21fd77d3b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_0d199d9631a3ee78cc34db4f4ede3f6aaf245aceba8777661e9f7e4448d7a271->leave($__internal_0d199d9631a3ee78cc34db4f4ede3f6aaf245aceba8777661e9f7e4448d7a271_prof);

        
        $__internal_0bd14f8bd2547810859bdd906bf074daf0f89e593c36be0fd419d21fd77d3b5e->leave($__internal_0bd14f8bd2547810859bdd906bf074daf0f89e593c36be0fd419d21fd77d3b5e_prof);

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
