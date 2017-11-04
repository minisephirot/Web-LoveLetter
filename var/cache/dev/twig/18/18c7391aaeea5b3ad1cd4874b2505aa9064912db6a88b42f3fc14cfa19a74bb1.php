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
        $__internal_7e232b968604e65cdb48e888de8d399be762d53dcaf8d83649c9eb8e820df0f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e232b968604e65cdb48e888de8d399be762d53dcaf8d83649c9eb8e820df0f7->enter($__internal_7e232b968604e65cdb48e888de8d399be762d53dcaf8d83649c9eb8e820df0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_10fc264adccb43cbdf6ad8e0b56698f21d4246242830e7eed6af89571b6b5e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10fc264adccb43cbdf6ad8e0b56698f21d4246242830e7eed6af89571b6b5e6b->enter($__internal_10fc264adccb43cbdf6ad8e0b56698f21d4246242830e7eed6af89571b6b5e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_7e232b968604e65cdb48e888de8d399be762d53dcaf8d83649c9eb8e820df0f7->leave($__internal_7e232b968604e65cdb48e888de8d399be762d53dcaf8d83649c9eb8e820df0f7_prof);

        
        $__internal_10fc264adccb43cbdf6ad8e0b56698f21d4246242830e7eed6af89571b6b5e6b->leave($__internal_10fc264adccb43cbdf6ad8e0b56698f21d4246242830e7eed6af89571b6b5e6b_prof);

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
