<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c81f1c6b24828e5e3f130cc0a255a0d8b86a5c734d74ea9a9f0203248c8108e8 extends Twig_Template
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
        $__internal_e362de40f65b74c526dccd8ecf1115298951cb0481947917ba564c56abe182fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e362de40f65b74c526dccd8ecf1115298951cb0481947917ba564c56abe182fc->enter($__internal_e362de40f65b74c526dccd8ecf1115298951cb0481947917ba564c56abe182fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_1bea855d78c3153571e9b5f5367496eccec06298355074a8f07af375ec60c944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bea855d78c3153571e9b5f5367496eccec06298355074a8f07af375ec60c944->enter($__internal_1bea855d78c3153571e9b5f5367496eccec06298355074a8f07af375ec60c944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e362de40f65b74c526dccd8ecf1115298951cb0481947917ba564c56abe182fc->leave($__internal_e362de40f65b74c526dccd8ecf1115298951cb0481947917ba564c56abe182fc_prof);

        
        $__internal_1bea855d78c3153571e9b5f5367496eccec06298355074a8f07af375ec60c944->leave($__internal_1bea855d78c3153571e9b5f5367496eccec06298355074a8f07af375ec60c944_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
