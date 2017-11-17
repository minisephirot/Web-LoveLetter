<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_29ea97043b3b5e4b6e1faac109c06b0c36984ad1be1c7cdf8fe7ab8d4337a5a5 extends Twig_Template
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
        $__internal_dc17301bf10650a45c75b2c1b36620601c47109bc302f96b0faa3f421e867663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc17301bf10650a45c75b2c1b36620601c47109bc302f96b0faa3f421e867663->enter($__internal_dc17301bf10650a45c75b2c1b36620601c47109bc302f96b0faa3f421e867663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_7fb317832be4b42fab46e50424a682c822b5ffcde28a2d0fbd3b9d46360cf793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb317832be4b42fab46e50424a682c822b5ffcde28a2d0fbd3b9d46360cf793->enter($__internal_7fb317832be4b42fab46e50424a682c822b5ffcde28a2d0fbd3b9d46360cf793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_dc17301bf10650a45c75b2c1b36620601c47109bc302f96b0faa3f421e867663->leave($__internal_dc17301bf10650a45c75b2c1b36620601c47109bc302f96b0faa3f421e867663_prof);

        
        $__internal_7fb317832be4b42fab46e50424a682c822b5ffcde28a2d0fbd3b9d46360cf793->leave($__internal_7fb317832be4b42fab46e50424a682c822b5ffcde28a2d0fbd3b9d46360cf793_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
