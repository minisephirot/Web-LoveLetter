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
        $__internal_5e22757c171aca7dcf8ae1bffa2f9f291c89084b83dec3f86346f2771160133c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e22757c171aca7dcf8ae1bffa2f9f291c89084b83dec3f86346f2771160133c->enter($__internal_5e22757c171aca7dcf8ae1bffa2f9f291c89084b83dec3f86346f2771160133c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d5f6b33ec2f34cece4465faeb8312099669655c2e6f08daac8868e82c1f0cd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f6b33ec2f34cece4465faeb8312099669655c2e6f08daac8868e82c1f0cd3a->enter($__internal_d5f6b33ec2f34cece4465faeb8312099669655c2e6f08daac8868e82c1f0cd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5e22757c171aca7dcf8ae1bffa2f9f291c89084b83dec3f86346f2771160133c->leave($__internal_5e22757c171aca7dcf8ae1bffa2f9f291c89084b83dec3f86346f2771160133c_prof);

        
        $__internal_d5f6b33ec2f34cece4465faeb8312099669655c2e6f08daac8868e82c1f0cd3a->leave($__internal_d5f6b33ec2f34cece4465faeb8312099669655c2e6f08daac8868e82c1f0cd3a_prof);

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
