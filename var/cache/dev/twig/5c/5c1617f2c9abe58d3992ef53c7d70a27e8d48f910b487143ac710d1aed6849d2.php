<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_84df81e35abd74689c0d93e4721c9d43c5fa66293d905fe6dd0a7328fbe9bfb7 extends Twig_Template
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
        $__internal_33f461d652de61aed7715a9b465b446c8f35dbfb3ae82307e3582aeaf9f2c614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f461d652de61aed7715a9b465b446c8f35dbfb3ae82307e3582aeaf9f2c614->enter($__internal_33f461d652de61aed7715a9b465b446c8f35dbfb3ae82307e3582aeaf9f2c614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a6f4bdcbbbd7f2b0efef47b25e09498f2b8203e8c8e25855e2cb07184c4b4c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f4bdcbbbd7f2b0efef47b25e09498f2b8203e8c8e25855e2cb07184c4b4c57->enter($__internal_a6f4bdcbbbd7f2b0efef47b25e09498f2b8203e8c8e25855e2cb07184c4b4c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_33f461d652de61aed7715a9b465b446c8f35dbfb3ae82307e3582aeaf9f2c614->leave($__internal_33f461d652de61aed7715a9b465b446c8f35dbfb3ae82307e3582aeaf9f2c614_prof);

        
        $__internal_a6f4bdcbbbd7f2b0efef47b25e09498f2b8203e8c8e25855e2cb07184c4b4c57->leave($__internal_a6f4bdcbbbd7f2b0efef47b25e09498f2b8203e8c8e25855e2cb07184c4b4c57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
