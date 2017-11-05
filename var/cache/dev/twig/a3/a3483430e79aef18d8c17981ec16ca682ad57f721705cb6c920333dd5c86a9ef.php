<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_23b26384ccfbdfc3ac637202e8fd19023c137c038b34d43c28c1336569ae6970 extends Twig_Template
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
        $__internal_c352f80dc499ae7b8d4f9e1175a9d5801b827075edd30141b2f5a5f3bbfa38a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c352f80dc499ae7b8d4f9e1175a9d5801b827075edd30141b2f5a5f3bbfa38a8->enter($__internal_c352f80dc499ae7b8d4f9e1175a9d5801b827075edd30141b2f5a5f3bbfa38a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_bda475cfc5cfe9a3afbe3756c88b6d1ca4e2247501f82b8804044d218cb292c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda475cfc5cfe9a3afbe3756c88b6d1ca4e2247501f82b8804044d218cb292c5->enter($__internal_bda475cfc5cfe9a3afbe3756c88b6d1ca4e2247501f82b8804044d218cb292c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c352f80dc499ae7b8d4f9e1175a9d5801b827075edd30141b2f5a5f3bbfa38a8->leave($__internal_c352f80dc499ae7b8d4f9e1175a9d5801b827075edd30141b2f5a5f3bbfa38a8_prof);

        
        $__internal_bda475cfc5cfe9a3afbe3756c88b6d1ca4e2247501f82b8804044d218cb292c5->leave($__internal_bda475cfc5cfe9a3afbe3756c88b6d1ca4e2247501f82b8804044d218cb292c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
