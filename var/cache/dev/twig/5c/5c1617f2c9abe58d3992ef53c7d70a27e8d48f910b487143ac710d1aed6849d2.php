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
        $__internal_b77dfeb0632534629db4fc66b1a1a79b5b696f04559357bb03e1b10f62580d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77dfeb0632534629db4fc66b1a1a79b5b696f04559357bb03e1b10f62580d05->enter($__internal_b77dfeb0632534629db4fc66b1a1a79b5b696f04559357bb03e1b10f62580d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_595337af910635d981df0bf1b57775bbfc5dbf7fa6258236b1a74ac288e3d728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595337af910635d981df0bf1b57775bbfc5dbf7fa6258236b1a74ac288e3d728->enter($__internal_595337af910635d981df0bf1b57775bbfc5dbf7fa6258236b1a74ac288e3d728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_b77dfeb0632534629db4fc66b1a1a79b5b696f04559357bb03e1b10f62580d05->leave($__internal_b77dfeb0632534629db4fc66b1a1a79b5b696f04559357bb03e1b10f62580d05_prof);

        
        $__internal_595337af910635d981df0bf1b57775bbfc5dbf7fa6258236b1a74ac288e3d728->leave($__internal_595337af910635d981df0bf1b57775bbfc5dbf7fa6258236b1a74ac288e3d728_prof);

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
