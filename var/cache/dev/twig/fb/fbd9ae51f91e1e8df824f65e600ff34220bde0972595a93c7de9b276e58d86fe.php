<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_165f3744fdb2b14823a83419f62990e40437d77de85ee0cde4b7b293e263ff34 extends Twig_Template
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
        $__internal_8676487e231ecbb38800b9ab242250c9d4b8df0b291e3a897c091c4efc9116d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8676487e231ecbb38800b9ab242250c9d4b8df0b291e3a897c091c4efc9116d3->enter($__internal_8676487e231ecbb38800b9ab242250c9d4b8df0b291e3a897c091c4efc9116d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_af7185bcf9e4d12e53a77c9db636fafc9d06fa1ee370839a1afa6c885d9fadc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7185bcf9e4d12e53a77c9db636fafc9d06fa1ee370839a1afa6c885d9fadc5->enter($__internal_af7185bcf9e4d12e53a77c9db636fafc9d06fa1ee370839a1afa6c885d9fadc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8676487e231ecbb38800b9ab242250c9d4b8df0b291e3a897c091c4efc9116d3->leave($__internal_8676487e231ecbb38800b9ab242250c9d4b8df0b291e3a897c091c4efc9116d3_prof);

        
        $__internal_af7185bcf9e4d12e53a77c9db636fafc9d06fa1ee370839a1afa6c885d9fadc5->leave($__internal_af7185bcf9e4d12e53a77c9db636fafc9d06fa1ee370839a1afa6c885d9fadc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
